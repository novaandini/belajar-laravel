<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <a href="menu/add" class="inline-block border-black border-solid border-2 px-3 py-1">Add Menu</a>
    <table class="table-auto w-full">
        <tr class="border-b-2 border-gray-300">
            <td>No</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        
        <?php $i = 1 ?>
        @foreach ($menus as $menu)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $menu['menu'] }}</td>
                <td>
                    <a href="menu/edit/{{ $menu['id'] }}">Edit</a> |
                    <a href="menu/delete/{{ $menu['id'] }}">Delete</a>
                </td>
            </tr>
            <?php $i = $i + 1 ?>
        @endforeach
    </table>
</x-layout>