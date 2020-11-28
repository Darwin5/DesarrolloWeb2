/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ahorcadoservidor;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.OutputStreamWriter;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author darwin
 */
public class AhorcadoServidor {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
       final int PUERTO =45000; 
       ServerSocket servidor=null;
       Socket socket = null;
        try {
             servidor= new ServerSocket(PUERTO);
             
             System.out.println("servidor esperando");
             
             socket = servidor.accept();
             
             System.out.println("Cliente se ha conectado");
             
             InputStream is = socket.getInputStream();
             InputStreamReader isw = new InputStreamReader(is);
             BufferedReader br = new BufferedReader(isw);
             
             OutputStream os = socket.getOutputStream();
             OutputStreamWriter osw = new OutputStreamWriter(os);
             BufferedWriter bw = new BufferedWriter(osw);
             
             
             
             final String palabra = "distribuidos";
             final String FIN = "FIN";
             String palabraAdivinadaHastaelMomento= inicializarPalabraAdivinadaHastaelMomento(palabra);
             String letra;
             do{
                 bw.write(palabraAdivinadaHastaelMomento);
                 bw.newLine();
                 bw.flush();
                 
                 letra = br.readLine();
                 
                 palabraAdivinadaHastaelMomento = actualizarPalabraAdivinadaHastaelMomento(palabra,palabraAdivinadaHastaelMomento,letra.charAt(0));
                 
             }while(!palabraAdivinadaHastaelMomento.equals(palabra));
             
             bw.write(FIN);
             bw.newLine();
             bw.flush();
             
             
        } catch (IOException ex) {
            Logger.getLogger(AhorcadoServidor.class.getName()).log(Level.SEVERE, null, ex);
        }
  
    }
    static String inicializarPalabraAdivinadaHastaelMomento(String palabra)
    {
        String resultado="";
        for (int i = 0; i < palabra.length();i++){
            resultado += "-";
        }
        return resultado;
    }
    
    static String actualizarPalabraAdivinadaHastaelMomento(String palabra,String palabraAdivinadaHastaelMomento, char letra)
    {
        String resultado ="";
        for (int i = 0; i < palabra.length();i++){
            if(palabra.charAt(i) == letra || palabra.charAt(i)== palabraAdivinadaHastaelMomento.charAt(i)){
                    resultado += palabra.charAt(i);
            }else{
                resultado += "-";
            }
        }
        return resultado;
    }
}
