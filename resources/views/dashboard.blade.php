<!-- resources/views/dashboard.blade.php -->
<x-app-layout>
    <section class="dashboard-header">
        <h1>Welcome, {{ $user->name }} to DIJA</h1>
            {{-- <img class="logo" src="/images/Logo.webp"> --}}
    </section>

    <x-products.filter :products="$products" :brands="$brands" :categories="$categories" action="{{ route('dashboard') }}" />


    <section class="dashboard-content">
        <section class="dashboard-card">
            <div class="header-row">
                <h2>Product Overview</h2>  
                @if (session('message'))
                    <p class="session-message">{{ session('message') }}</p>
                @endif
            </div>
        
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Height</th>
                    <th scope="col">Width</th>
                    <th scope="col">Category</th>
                    @if (auth()->check() && auth()->user()->isAdmin())
                    <th scope="col">Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></td>
                        <td>${{ $product->price }}</td>
                        <td>{{ $product->weight }}</td>
                        <td>{{ $product->height }}</td>
                        <td>{{ $product->width }}</td>
                        <td>{{ $product->category->name ?? 'N/A' }}</td>
                        <td>
                            @if (auth()->check() && auth()->user()->isAdmin())
                            <a href="/products/{{$product->id}}/edit">
                                <button class="edit-link">
                                    Edit
                                </button>  
                            </a>
                            <form method="post" action="{{ route('products.destroy', $product) }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="source" value="dashboard">
                                <button type="submit" class="delete-link" 
                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                    Delete
                                </button>
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
        {{ $products->links() }}
</x-app-layout>