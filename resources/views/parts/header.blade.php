<nav>
    <ul class="">
        <li><a href="{{ url('/') }}">Acceuil</a></li>
        <li><a href="{{ url('/') }}">Produits</a></li>
        <li><a href="{{ url('/') }}">Nouveau produit</a></li>
        <form class="" action="/logout" method="post">
        @csrf
        {{ Auth::user()->name }}
        <input type="submit" name="" value="déconnection">
        </form>
    </ul>
</nav> 