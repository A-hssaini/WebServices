package metiers.module;

import java.sql.SQLException;

import javax.jws.WebMethod;
import javax.jws.WebService;
import donnee.ModuleDao;
import entity.Module;


@WebService
public class ModuleSoap {

	ModuleDao moduleDao;

	public ModuleSoap() {
		moduleDao = new ModuleDao();
	}
	
	@WebMethod
	public void enregistrement(Module module) throws SQLException
	{
		moduleDao.enregistrement(module);
		System.out.println("module bien crée");
	}
	
	
	@WebMethod
	public void modification(Module module) throws SQLException
	{
		moduleDao.modification(module);
	}
	
	
	@WebMethod
	public void suppression(String code) throws SQLException
	{
		moduleDao.suppression(code);
	}
	
	
}