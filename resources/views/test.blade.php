<form action="{{route('apply')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <input type="text" name='name'>
    <input type="text" name='email'>
    <input type='text' name='hello'>
    <input type="text" name='cover_letter'>
    <input type="file" name='cv'>
    <input type="text" name='job_id' value='1'>
    <input type='submit' value="submit">
</form>