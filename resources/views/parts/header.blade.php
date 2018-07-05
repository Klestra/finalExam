<nav class="nav">
    <ul>
        <li><a href="{{ url('/') }}">Acceuil</a></li>
        <li><a href="{{ url('/products') }}">Produits</a></li>
        <li><a href="{{ url('/products/insert') }}">Nouveau produit</a></li>
        <form class="" action="/logout" method="post">
        @csrf
        {{ Auth::user()->name }}
        <input type="submit" name="" value="déconnection">
        </form>
    </ul>
</nav> 