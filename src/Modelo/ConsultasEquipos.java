package Modelo;

import com.mysql.jdbc.Connection;
import com.mysql.jdbc.PreparedStatement;    

public class ConsultasEquipos extends Conexion {
    
    public boolean registrar (Equipos pro) {
        
        PreparedStatement ps = null;
        Connection cx = (Connection) conectar();
        
        String sql = "INSERT INTO equipos (ID, Nombre, Ciudad) VALUES (?, ?, ?)";
                
       try {
        
        ps = cx.PreparedStatement(sql);
        return true;
       }
    }
    
}
