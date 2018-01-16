using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using System.Text;
using System.IO;
using System.Text.RegularExpressions;
using System;

public class TxtReader : MonoBehaviour {
	public List<string> texto = new List<string>();
	public List<string>	terminales = new List<string> ();
	public List<string>	noTerminales = new List<string> ();


	static string erProduccion = "<([A-Z]*|[0-9]*|¬|[a-z]*)+>-([A-Z]|[a-z]|[0-9]|<([A-Z]*|[a-z]*|¬)+>|λ)+";
	static string erNoTerminal = "<([A-Z]*|[0-9]*|¬|[a-z]*)+>";

	public bool CargarArchivo(string archivo)
	{
		bool huboAlgunError = false;
		texto.Clear ();
		try {
			string[] k = File.ReadAllLines (archivo);
			for (int i = 0; i < k.Length; i++) {
				if (ComparadorExpresionesRegulares(erProduccion,k[i])){
					texto.Add(k [i]);
				}else{
					print("No agregué: ''" + k[i] + "'' porque no cumple con la <b>Expresión Regular</b>");
					huboAlgunError = true;
				}
			}
		} catch (Exception ex) {
			huboAlgunError = true;
			print (ex.Message);
		}



		return !huboAlgunError;

	}

	public static List<string> ObtenerTerminales(string linea){
		List<string> mNoTerminales = ObtenerNoTerminales(linea);
		List<string> terminalesRetornar = new List<string> ();
		foreach (string noTerminal in mNoTerminales) {
			linea = linea.Replace (noTerminal, "");
		}
		linea = linea.Replace ("-", "");
		for (int i = 0; i < linea.Length; i++) {
			terminalesRetornar.Add (linea [i] + "");
		}
		return EliminarRepetidos(terminalesRetornar);
	}

	public static string ObtenerPrimerNoTerminal(string linea)
	{
		int i = linea.IndexOf ("-");
		return linea.Substring (0, i);
	}
	public static string ObtenerDefinicion(string linea)
	{
		int i = linea.IndexOf ("-");
		return linea.Substring (i+1);
	}

	public static bool ComparadorExpresionesRegulares(string exp, string linea)
	{
		return Regex.IsMatch (linea, exp);
	}

	public static List<string> ObtenerNoTerminales(string linea)
	{
		MatchCollection miColeccion;
		miColeccion = Regex.Matches (linea, erNoTerminal);
		List<string> listaRetornar = new List<string> ();

		for (int i = 0; i < miColeccion.Count;i++) {
			listaRetornar.Add (miColeccion[i].Value);
		}
		listaRetornar = EliminarRepetidos (listaRetornar);
		return listaRetornar;
	}

	public static List<string> EliminarRepetidos(List<string> listaNoRetornar)
	{
		List<string> listaRetornar = new List<string> ();
		for (int i = 0; i < listaNoRetornar.Count; i++) {
			bool a = false;
			for (int j = 0; j < listaRetornar.Count; j++)
			{
				a = a | (listaNoRetornar [i] == listaRetornar [j]);
			}
			if (!a) {
				listaRetornar.Add (listaNoRetornar [i]);
			}
		}
		return listaRetornar;
	}
}
