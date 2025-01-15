<!DOCTYPE html>
<html lang="en">

<body>
    <h1>Edit Qytetar</h1>
    <form action="{{ url('/qytetaret/' . $qytetar->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="emri">Emri:</label>
            <input type="text" name="emri" id="emri" value="{{ $qytetar->emri }}" required>
        </div>
        <div>
            <label for="mbiemri">Mbiemri:</label>
            <input type="text" name="mbiemri" id="mbiemri" value="{{ $qytetar->mbiemri }}" required>
        </div>
        <div>
            <label for="gjinia">Gjinia:</label>
            <select name="gjinia" id="gjinia" required>
                <option value="M" {{ $qytetar->gjinia == 'M' ? 'selected' : '' }}>Male</option>
                <option value="F" {{ $qytetar->gjinia == 'F' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <!-- Viti i Lindjes (Birth Year) -->
        <div>
            <label for="viti_i_lindjes">Viti i Lindjes:</label>
            <input type="number" name="viti_i_lindjes" id="viti_i_lindjes" 
            value="{{ $qytetar->viti_i_lindjes }}" required min="1900" max="{{ date('Y') }}">
        </div>

   

        <button type="submit">Update</button>
    </form>
</body>

</html>