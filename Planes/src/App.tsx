import './App.css'

function App() {

  return (
    <>
      <h1>Planes</h1>
      <section>
        <div>
          <h2>Free</h2>
          <p><span>0$</span></p>
          <button>PRUEBA GRATIS</button>
          <p>Para empresas pequeñas</p>
          <ul>
            <li><a href="#">De 1a 3 usuarios</a></li>
            <li><a href="#">800 registros en la base de datos</a></li>
            <li><a href="#">10MB en el servidor</a></li>
          </ul>
        </div>

        <div>
          <h2>Economic</h2>
          <p><span>10$</span></p>
          <button>Empieza hoy</button>
          <p>Para empresas medianas</p>
          <ul>
            <li><a href="#">De 5 a 8 usuarios</a></li>
            <li><a href="#">5000 registros en la base de datos</a></li>
            <li><a href="#">30MB en el servidor</a></li>
          </ul>
        </div>

        <div>
          <h2>Enterprise</h2>
          <p><span>30$</span></p>
          <button>Empieza hoy</button>
          <p>Para empresas grandes</p>
          <ul>
            <li><a href="#">De 10 a 12 usuarios</a></li>
            <li><a href="#">20000 registros en la base de datos</a></li>
            <li><a href="#">50MB en el servidor</a></li>
          </ul>
        </div>
      </section>
    </>
  )
}

export default App
