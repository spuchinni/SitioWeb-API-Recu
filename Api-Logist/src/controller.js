import { pool } from "./database.js";

class UsuarioController{

    async getAll(req, res) {
        const [result] = await pool.query('SELECT * FROM usuarios');
        res.json(result);
    }

    async add(req, res){
        const usuario = req.body;
        const schema = {
            nombre: String,
            apellido: String,
            usuario: String,
            email: String,
            pass: String,
            id_perfil: Number,
            baja: String,
          
        };

        try {
            for (const atributo in usuario) {
            
              if (!schema.hasOwnProperty(atributo)) {
              // El atributo no existe en el schema
                res.status(400).json({ Error: `El atributo ${atributo} no existe` });
                return;
              }
            }

            const [existeUsuario] = await pool.query(
                `SELECT * FROM usuarios WHERE id_usuario = ?`,[usuario.id_usuario]);
    
                if (existeUsuario.length > 0) {
                  res.status(409).json({ Error: 'El usuario ya existe' });
              } else {
                  // inserta el usuario
                  const [result] = await pool.query(
                      'INSERT INTO usuarios (nombre, apellido, usuario, email, pass, id_perfil, baja) VALUES (?, ?, ?, ?, ?, ?, ?)',
                      [usuario.nombre, usuario.apellido, usuario.usuario, usuario.email, usuario.pass, usuario.id_perfil, usuario.baja]
                  );
                  res.json({ "Id Insertado": result.insertId });
              }
          } catch (error) {
              res.status(500).json({ Error: 'Error en los datos de la base' });
          }
    
        }
       
    

    async delete(req, res){
        const usuario = req.body;// rescatando los datos del postman
        
        try{
            const [existeUsuario] = await pool.query(
              `SELECT * FROM usuarios WHERE id_usuario = ?`,[usuario.id_usuario]);
    
              if (existeUsuario.length > 0) {
                const [result] = await pool.query(`DELETE FROM usuarios WHERE id_usuario=(?)`, [usuario.id_usuario]);   
                res.json({"Registros eliminados": result.affectedRows});
                  
            } else {
                    res.status(409).json({ Error: 'El Usuario no existe' });
                  
            } 
        } 
          catch (error) {
              res.status(500).json({ Error: 'Error en los datos de la base' });
          }
        }
        
    
//modificar registro
        async update(req, res) {
          const usuario = req.body;

        try {
           const [result] = await pool.query(
            `UPDATE usuarios SET nombre=?, apellido=?, usuario=?, email=?, pass=?, id_perfil=?, baja=? WHERE id_usuario=?`,
            [usuario.nombre, usuario.apellido, usuario.usuario, usuario.email, usuario.pass, usuario.id_perfil, usuario.baja, usuario.id_usuario]
          );

          if (result.affectedRows > 0) {
            res.json({ "Registro Modificado": result.changedRows });
          } else {
            res.status(404).json({ Error: 'Usuario no encontrado' });
          }

          } catch (error) {
            res.status(500).json({ Error: 'Error en los datos' });
          }
        }



        async getOne(req, res) {
          const usuario = req.body.id_usuario; // obtenemos el id cargando en el body
          try {
          const [result] = await pool.query('SELECT * FROM usuarios WHERE id_usuario = ?', [usuario]);
  
          if (result.length > 0) {
              res.json(result[0]);
            } else {
              res.status(404).json({ Error: 'Usuario no encontrado', id_usuario: usuario});
            }        
        }
         catch (error) {
            res.status(500).json({ Error: 'Error en los datos' });
          }
        }
        
}

export const usuario = new UsuarioController();