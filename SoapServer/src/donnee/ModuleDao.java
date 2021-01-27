package donnee;

import java.sql.ResultSet;
import java.sql.SQLException;

import com.mysql.jdbc.Connection;
import com.mysql.jdbc.Statement;

import entity.Enseignant;
import entity.Module;

public class ModuleDao {
private Connection connectionDb;
	
	public ModuleDao() {
		
		connectionDb = ConnectionDb.getConnection();
		// TODO Auto-generated constructor stub
	}
	public Boolean conditionEstVerifie(Module e) throws SQLException
	{
		int max = 2;
		String sql = "SELECT * from modules where enseignant = '" + e.getCode_enseignant() + "'";		
		Statement st = (Statement) connectionDb.createStatement();
		ResultSet rs = (ResultSet) st.executeQuery(sql);

		while (rs.next()) {
			max--;
		}
		st.close();
		if (max >= 1)
			return true;
		else
			return false;
	}
	public void enregistrement(Module e) throws SQLException
	{
		if(conditionEstVerifie(e)) {
		String sql = "INSERT INTO modules (id_mod, intitule,enseignant) "
				+ "VALUES (?, ?, ?)";

		
		java.sql.PreparedStatement statement = connectionDb.prepareStatement(sql);
		statement.setString(1, e.getCode_module());
		statement.setString(2, e.getNom_module());
		statement.setString(3, e.getCode_enseignant());
		int rowsInserted = statement.executeUpdate();
		if (rowsInserted > 0) {
			System.out.println("A new user was inserted successfully!");
		}
		}
		else System.out.println("L'enseignant peut enseigner au plus 2 modules!!!");
	}
	
	public void modification(Module e) throws SQLException
	{
		String sql = "update  modules set intitule = ?, enseignant=?  where id_mod = ?";

		
		java.sql.PreparedStatement statement = connectionDb.prepareStatement(sql);
		
		statement.setString(1, e.getNom_module());
		statement.setString(2, e.getCode_enseignant());
		statement.setString(3, e.getCode_module());
		
		int rowsInserted = statement.executeUpdate();
		if (rowsInserted > 0) {
			System.out.println("A new user was inserted successfully!");
		}

	}
	
	
	public void suppression(String code) throws SQLException
	{
		String sql = "delete from  modules  where id_mod = ?";

		
		java.sql.PreparedStatement statement = connectionDb.prepareStatement(sql);
		statement.setString(1, code);
		int rowsInserted = statement.executeUpdate();
		if (rowsInserted > 0) {
			System.out.println("A new user was deleted successfully!");
		}

	}
}