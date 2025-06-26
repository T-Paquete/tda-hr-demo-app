<h1>Shifts</h1>

@foreach ($shifts as $shift)
    <p>
        {{ \Carbon\Carbon::parse($shift->start)->format('d.m.Y H:i') }}
        -
        {{ \Carbon\Carbon::parse($shift->end)->format('d.m.Y H:i') }}
        (Employee ID: {{ $shift->employee_id }})

        <!-- Delete Button -->
        <form action="{{ route('shifts.destroy', $shift->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this shift?')">
                🗑 Delete
            </button>
        </form>
    </p>
@endforeach

<a href="{{ route('shifts.create') }}">Create New Shift</a>
