

import java.sql.SQLException;

import javax.xml.ws.Endpoint;

import metiers.enseignant.EnseignantSoap;
import metiers.module.ModuleSoap;

public class Server {

	public static void main(String[] args) throws SQLException {
		String address = "http://localhost:";
		EnseignantSoap enseignantSoap = new EnseignantSoap();
		ModuleSoap moduleSoap = new ModuleSoap();
        Endpoint.publish(address+"9997/module", moduleSoap);
		Endpoint.publish(address+"9998/enseignant", enseignantSoap);
		System.out.println("Server is running at " + address+"9997/module");
		System.out.println("Server is running at " + address+"9998/enseignant");

	}

}
