<html>
    <form method="post" action="respuesta">
        {{csrf_field()}}
        <label>Dividendo:</label>
        <input type="number" name="dividendo">
        <label>Divisor:</label>
        <input type="number" name="divisor">
        <button type="submit">Dividir</button>
    </form>
</html>