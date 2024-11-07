<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">Grade Name</th>
                    <th class="py-2 px-4 border-b">Student List</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grades as $grade)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4 border-b">{{ $grade->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $grade->name }}</td>
                    <td class="py-2 px-4 border-b">
                        @foreach ($grade->students as $student)
                            <ul>
                                <li>{{ $student->name }}</li>
                            </ul>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
