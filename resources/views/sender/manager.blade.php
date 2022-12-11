<p><b>Имя:</b> {{$name}}</p>
<p><b>Email:</b> {{$email}}</p>
<p><b>Телефон:</b> {{$phone}}</p>
<p><b>Вид услуги:</b> {{ $select_type_service }}</p>
@if ($type_site)
    <p><b>Тип сайта:</b> {{ $type_site }}</p>
@endif