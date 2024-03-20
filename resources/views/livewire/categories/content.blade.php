<div class="mt-5 grid grid-cols-12 gap-6">
    <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
        <x-base.button
            class="mr-2 shadow-md"
            data-tw-toggle="modal"
            data-tw-target="#header-footer-modal-preview"
            variant="primary"
        >
            Add New Category
        </x-base.button>
        <div class="mx-auto hidden text-slate-500 md:block">
            Showing {{ $data->total() < $perPage  ? $data->total() : $perPage }} data of {{ $data->total() }} entries
        </div>
        <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
            <div class="relative w-56 text-slate-500">
                <x-base.form-input
                    class="!box w-56 pr-10"
                    type="text"
                    wire:model.live="search"
                    placeholder="Search..."
                />
                <x-base.lucide
                    class="absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"
                    icon="Search"
                />
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <x-base.table class="-mt-2 border-separate border-spacing-y-[10px]">
            <x-base.table.thead>
                <x-base.table.tr>
                    <x-base.table.th class="whitespace-nowrap border-b-0">
                        CATEGORY NAME
                    </x-base.table.th>
                    <x-base.table.th class="whitespace-nowrap border-b-0"> SLUG </x-base.table.th>
                    <x-base.table.th class="whitespace-nowrap border-b-0 text-center">
                        STATUS
                    </x-base.table.th>
                    <x-base.table.th class="whitespace-nowrap border-b-0 text-center">
                        ACTIONS
                    </x-base.table.th>
                </x-base.table.tr>
            </x-base.table.thead>
            <x-base.table.tbody>
                @foreach ($data as $item)
                    <x-base.table.tr class="intro-x">
                        <x-base.table.td
                            class="box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                        >
                            <a
                                class="whitespace-nowrap font-medium"
                                href=""
                            >
                                {{ $item->name }}
                            </a>
                        </x-base.table.td>
                        <x-base.table.td
                            class="box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                        >
                            <a
                                class="mr-3 flex items-center text-slate-500"
                                href="#"
                            >
                                <i class="fa-regular fa-arrow-up-right-from-square"></i>&nbsp;
                                /categories/{{ $item->slug }}
                            </a>
                        </x-base.table.td>
                        <x-base.table.td
                            class="box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                        >
                            <div @class([
                                'flex items-center justify-center',
                                'text-success' => $item->status,
                                'text-danger' => !$item->status,
                            ])>
                                <i class="fa-regular fa-circle-check"></i>&nbsp;
                                {{ $item->status ? 'Active' : 'Inactive' }}
                            </div>
                        </x-base.table.td>
                        <x-base.table.td @class([
                            'box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600',
                            'before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400',
                        ])>
                            <div class="flex items-center justify-center">
                                <a
                                    class="mr-3 flex items-center"
                                    href=""
                                >
                                    <i class="fa-light fa-pen-to-square"></i>&nbsp;
                                    Edit
                                </a>
                                <a
                                    class="flex items-center text-danger"
                                    data-tw-toggle="modal"
                                    data-tw-target="#delete-confirmation-modal"
                                    href="#"
                                >
                                    <i class="fa-light fa-trash"></i>&nbsp;
                                    Delete
                                </a>
                            </div>
                        </x-base.table.td>
                    </x-base.table.tr>
                @endforeach
            </x-base.table.tbody>
        </x-base.table>
    </div>
    
    {{ $data->links() }}
    <!-- END: Data List -->
</div>