<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформить заказ</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="./css/order.css">
</head>
<body>

    <div class="form-order">
    @if($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
     <form method="post" action="/order/check">
         @csrf
         <input type="text" name="customer_name" id="customer_name" placeholder="Введите ваше имя" class="input is-rounded is-focused">
         <input type="text" name="customer_phone" id="customer_phone" placeholder="Введите номер телефона" class="input is-rounded is-focused">
         <input type="text" name="by_what_time" id="by_what_time" placeholder="Введите время для доставки" class="input is-rounded is-focused">
         <input type="textarea" name="street" id="street" placeholder="Введите улицу" class="input is-rounded is-focused">
         <input type="text" name="building" id="building" placeholder="Введите дом" class="input is-rounded is-focused">
         <input type="text" name="flat" id="flat" placeholder="Введите квартиру" class="input is-rounded is-focused">      
         <div class="control">
            <textarea name="comment" id="comment" class="textarea is-focused" placeholder="Введите ваш коммментарий к заказу"></textarea>
        </div>
         <button class="button is-link is-outlined is-rounded" type="submit">Заказать</button>
         
     </form>
</div>
</body>
</html>