    <?php $teacher = App\Models\Teacher::find(session()->get('AUTH_ID')); ?>
    @if ($teacher)
        <p>Welcome, {{ $teacher->name }}!</p>
    @endif

<a href="/teachers">Show Teacher List</a>
<br>
<a href="/logout">Logout</a>
