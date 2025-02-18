<x-layouts.main :title="$title">
    <p>El body de incomes:</p>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-xl font-bold mb-4">Lista de Ingresos</h2>

        <x-table :headers="$headers" :data="$incomes" />
    </div>
</x-layouts.main>
