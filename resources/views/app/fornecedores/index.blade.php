<h3>Fornecedores</h3>
{{-- <ul>
    <li>
        <a href="{{ route('site.index') }}">Principal</a>
    </li>
    <li>
        <a href="{{ route('site.sobrenos') }}">Sobre nós</a>
    </li>
    <li>
        <a href="{{ route('site.contato') }}">Contato</a>
    </li>
    <li>
        <a href="{{ route('site.login') }}">Login</a>
    </li>
    <li>
        <a href="{{ route('app.clientes') }}">Clientes</a>
    </li>
    <li>
        <a href="{{ route('app.fornecedores') }}">Fornecedores</a>
    </li>
    <li>
        <a href="{{ route('app.produtos') }}">Produtos</a>
    </li>
</ul> --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10 )
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3> Ainda não existem fornecedores cadastrados </h3>
@endif