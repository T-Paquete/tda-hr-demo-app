<h1>Create New Shift</h1>

<form method="POST" action="{{ route('shifts.store') }}">
    @csrf
    <label for="start">Start Time:</label>
    <input type="datetime-local" name="start"><br><br>

    <label for="end">End Time:</label>
    <input type="datetime-local" name="end"><br><br>

    <label for="employee_id">Employee ID:</label>
    <input type="number" name="employee_id"><br><br>

    <button type="submit">Save Shift</button>
</form>
