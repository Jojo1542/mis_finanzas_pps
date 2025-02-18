@props(['headers', 'data'])

<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
    <tr>
        @foreach ($headers as $header)
            <th scope="col" class="px-6 py-3">
                {{ $header }}
            </th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $index => $row)
        <tr class="bg-white dark:bg-gray-800">
            @foreach ($row as $cell)
                <td class="px-6 py-4">
                    {{ $cell }}
                </td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
