<x-layout>
    @include('navbar')



    <script src="{{ asset('/js/cart.js') }}" defer></script>
    <x-slot:title>Article Lists</x-slot>
        @yield('navbar')
        <main>
        <form method="GET" action="/articles">
            <label for="search">search article name :</label>
            <input type="search" name="search" id="search">
            <input type="submit" value="submit">
        </form>

        <x-cart-overview></x-cart-overview>
        <table>
            <tbody>
            <tr>
                <th>images</th>
                <th>name</th>
                <th>price</th>
                <th>description</th>
            </tr>
            @foreach($result as $table)
                <tr>
                    <td><img alt="{{$table['ab_name']}}" src={{$dir[$table['id']]}}></td>
                    <td class="article-name">{{$table['ab_name']}}</td>
                    <td class="article-price">{{$table['ab_price']}}</td>
                    <td class="article-desc">{{$table['ab_description']}}</td>
                    <td><a href=# class="add-to-cart-button" style="text-decoration: none; color: black;">+</a></td>
                    <td><a href=# class="remove-from-cart-button" style="text-decoration: none; color: black;">-</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </main>
</x-layout>
