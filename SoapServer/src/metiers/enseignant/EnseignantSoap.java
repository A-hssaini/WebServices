package metiers.enseignant;


import java.sql.SQLException;

import javax.jws.WebMethod;
import javax.jws.WebService;
import donnee.EnseignantDao;
import entity.Enseignant;

@WebService
public class EnseignantSoap {

	EnseignantDao enseignantDao;

	public EnseignantSoap() {
		enseignantDao = new EnseignantDao();
	}
	
	@WebMethod
	public void enregistrement(Enseignant ens) throws SQLException
	{
		enseignantDao.enregistrement(ens);
		
	}
	
	
	@WebMethod
	public void modification(Enseignant ens) throws SQLException
	{
		enseignantDao.modification(ens);
	}
	
	
	@WebMethod
	public void suppression(String cne) throws SQLException
	{
		enseignantDao.suppression(cne);
	}
	
	
}
