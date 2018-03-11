<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
</head>
<body>

{!! Form::open(array('url' => 'localhost', 'class' => 'form')) !!}
{!! Form::text('date', '', array('id' => 'datepicker')) !!}
{!! Form::select('teachers',$teachers,null) !!}
{!! Form::submit('submit') !!}
{!! Form::close() !!}

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker({dateFormat: "dd-mm-yy"}).val();
    });
</script>
</body>
</html>