// views/login/js/index.jsx

// views/login/js/index.jsx
import React, { useState } from 'react';
import ReactDOM from 'react-dom';

const Login = () => {
  const [username, setUsername] = useState('');
  const [password, setPassword] = useState('');

  const handleLogin = (e) => {
    e.preventDefault();
    // Aquí puedes agregar la lógica de autenticación con el backend (PHP)
    // Por ahora, solo mostramos los valores ingresados en el formulario
    console.log('Username:', username);
    console.log('Password:', password);
  };

  return (
    <div className="container mt-5">
      <h1 className="mb-4">Inicio de sesión</h1>
      <form onSubmit={handleLogin}>
        <div className="form-group">
          <label>Nombre de usuario</label>
          <input
            type="text"
            className="form-control"
            value={username}
            onChange={(e) => setUsername(e.target.value)}
            required
          />
        </div>
        <div className="form-group">
          <label>Contraseña</label>
          <input
            type="password"
            className="form-control"
            value={password}
            onChange={(e) => setPassword(e.target.value)}
            required
          />
        </div>
        <button type="submit" className="btn btn-primary">Iniciar sesión</button>
      </form>
    </div>
  );
};

ReactDOM.render(<Login />, document.getElementById('root'));

