<div style="margin-bottom: 1em;">
  <a href="{{ route('cities.index') }}">City list</a>
</div>

<h1>Edit city</h1>

@if(session('message'))
<div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('cities.edit', $city) }}" method="post">
  @csrf
  <div style="margin-bottom: 1em;">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Enter city" value="{{ $city->name}}">
    @error('name')
    <div style="color: red;">{{ $message }}</div>
    @enderror
  </div>

  <div style="margin-bottom: 1em;">
    <label for="department_id">department</label>
    <select name="department_id" id="department_id">
      <option value="">Select</option>
      @foreach($department as $department)
      <option 
        @if ($department->id === (int)$city->department_id)
          selected
        @endif
        value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach

    </select>
    @error('department_id')
    <div style="color: red;">{{ $message }}</div>
    @enderror

  </div>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>