<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Kelas</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4 border-b">{{ $student->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $student->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $student->class }}</td>
                    <td class="py-2 px-4 border-b">{{ $student->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $student->address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
