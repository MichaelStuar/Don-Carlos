using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using System.Runtime.InteropServices;
using System.IO;

public class GuardarTextos : MonoBehaviour {
	[DllImport("user32.dll")]
	private static extern void SaveFileDialog ();


	public static void Guardar (List<string> texto) {

		System.Windows.Forms.SaveFileDialog dlg = new System.Windows.Forms.SaveFileDialog ();
		dlg.Filter = "Archivos de texto plano txt|*.txt";
		dlg.ShowDialog ();
		string nombreDelArchivo = dlg.FileName;
		if (nombreDelArchivo.Substring (nombreDelArchivo.Length - 4) != ".txt")
			nombreDelArchivo = nombreDelArchivo + ".txt";
		using (StreamWriter sw = new StreamWriter(nombreDelArchivo)) 
		{
			foreach (string linea in texto) {
				sw.WriteLine(linea);
			}

		}
	}

	public static void GuardarAutomata (string texto) {

		System.Windows.Forms.SaveFileDialog dlg = new System.Windows.Forms.SaveFileDialog ();
		dlg.Filter = "Archivos de Excel CSV|*.csv";
		dlg.ShowDialog ();
		string nombreDelArchivo = dlg.FileName;
		if (nombreDelArchivo.Substring (nombreDelArchivo.Length - 4) != ".csv")
			nombreDelArchivo = nombreDelArchivo + ".csv";
		using (StreamWriter sw = new StreamWriter(nombreDelArchivo)) 
		{
			sw.Write(texto);
		}
	}

	public static string OpenDialogLoad()
	{
		System.Windows.Forms.OpenFileDialog dlg = new System.Windows.Forms.OpenFileDialog ();
		dlg.Filter = "Archivos de texto plano txt|*.txt";
		dlg.ShowDialog ();
		return dlg.FileName;
	}

}
