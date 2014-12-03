<?php 

$message = Session::get('message');
$success = Session::get('success');
$warning = Session::get('warning');
$error = Session::get('error');

?>
@if($message)
<div class="alert alert-dismissable alert-info">
<button type="button" class="close" data-dismiss="alert">x</button>
{{ $message }}
</div>
@endif

@if($success)
<div class="alert alert-dismissable alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{ $success }}
</div>
@endif

@if($warning)
<div class="alert alert-dismissable alert-warning">
<button type="button" class="close" data-dismiss="alert">x</button>
{{ $warning }}
</div>
@endif

@if($error)
<div class="alert alert-dismissable alert-danger">
<button type="button" class="close" data-dismiss="alert">x</button>
{{ $error }}
</div>
@endif