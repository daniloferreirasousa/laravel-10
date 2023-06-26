<div>
    <div class="flex items-center gap-x-3">
        <h1 class="text-lg text-black-500">Fórum</h1>

        <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">{{ $supports->total() }} dúvidas</span>
    </div>
</div>

<div class="flex items-center mt-4 gap-x-3">
    <a href="{{ route('supports.create') }}" class="font-medium text-blue-600 hover:text-blue-700 focus:text-blue-800 duration-300 transition ease-in-out text-sm">
        <span>Nova dúvida</span>
    </a>
</div>
