
package Modelo;

import com.mysql.jdbc.Connection;
import com.mysql.jdbc.PreparedStatement;
import java.sql.SQLException;

public class ConsultasEquipos extends Conexion {
    
    public boolean registrar(Equipos pro) {
        PreparedStatement ps = null;
        Connection con = (Connection) getConexion();
        String sql = "INSERT INTO Equipos (ID, Nombre, Ciudad) VALUES (?, ?, ?)";
        try {
            ps = (PreparedStatement) con.prepareStatement(sql);
            ps.setInt(1, pro.getID());
            ps.setString(2, pro.getNombre());
            ps.setString(3, pro.getCiudad());
            ps.execute();
            return true;
        }catch (SQLException e) {
            System.err.println(e);
            return false;
        } finally {
         try {
             con.close();
         }catch(SQLException e) {
             System.err.println(e);  
         }
        }
    }   
    
    public boolean modificar(Equipos pro) {
        PreparedStatement ps = null;
        Connection con = (Connection) getConexion();
        String sql = "UPDATE Equipos SET Nombre=?, Ciudad=? WHERE ID=?";
        try {
            ps = (PreparedStatement) con.prepareStatement(sql);
            ps.setInt(1, pro.getID());
            ps.setString(2, pro.getNombre());
            ps.setString(3, pro.getCiudad());
            ps.execute();
            return true;
        }catch (SQLException e) {
            System.err.println(e);
            return false;
        } finally {
         try {
             con.close();
         }catch(SQLException e) {
             System.err.println(e);  
         }
        }
    } 
    
    public boolean eliminar (Equipos pro) {
        PreparedStatement ps = null;
        Connection con = (Connection) getConexion();
        String sql = "INSERT INTO Equipos (ID, Nombre, Ciudad) VALUES (?, ?, ?)";
        try {
            ps = (PreparedStatement) con.prepareStatement(sql);
            ps.setInt(1, pro.getID());
            ps.setString(2, pro.getNombre());
            ps.setString(3, pro.getCiudad());
            ps.execute();
            return true;
        }catch (SQLException e) {
            System.err.println(e);
            return false;
        } finally {
         try {
             con.close();
         }catch(SQLException e) {
             System.err.println(e);  
         }
        }
    }   
}