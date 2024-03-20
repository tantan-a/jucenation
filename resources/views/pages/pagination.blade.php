<div class="intro-y col-span-12 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
    <x-base.pagination class="w-full sm:mr-auto sm:w-auto">
        @if($paginator->onFirstPage())
            <x-base.pagination.link disabled>
                <i class="fa fa-chevron-left"></i>
            </x-base.pagination.link>
        @else
            <x-base.pagination.link wire:click="previousPage">
                <i class="fa fa-chevron-left"></i>
            </x-base.pagination.link>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
 
            @if ($paginator->currentPage() == count($element) && count($element) > 2)
                <x-base.pagination.link wire:click="gotoPage({{ $paginator->currentPage()-2 }})">{{ $paginator->currentPage()-2 }}</x-base.pagination.link>
            @endif

            @if ($paginator->currentPage() != 1)
                <x-base.pagination.link wire:click="gotoPage({{ $paginator->currentPage()-1 }})">{{ $paginator->currentPage()-1 }}</x-base.pagination.link>
            @endif

            <x-base.pagination.link active>{{ $paginator->currentPage() }}</x-base.pagination.link>

            @if ($paginator->currentPage()+1 <= count($element))
                <x-base.pagination.link wire:click="gotoPage({{ $paginator->currentPage()+1 }})">{{ $paginator->currentPage()+1 }}</x-base.pagination.link>
            @endif

            @if ($paginator->currentPage() == 1 && count($element) > 2)
                <x-base.pagination.link wire:click="gotoPage({{ $paginator->currentPage()+2 }})">{{ $paginator->currentPage()+2 }}</x-base.pagination.link>
            @endif
        @endforeach

        @if($paginator->hasMorePages())
            <x-base.pagination.link wire:click="nextPage">
                <i class="fa fa-chevron-right"></i>
            </x-base.pagination.link>
        @else
            <x-base.pagination.link disabled>
                <i class="fa fa-chevron-right"></i>
            </x-base.pagination.link>
        @endif
    </x-base.pagination>
    <x-base.form-select class="!box mt-3 sm:mt-0" style="width: 100px !important;" wire:change="updatePerPage" wire:model="perPage">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="35">35</option>
        <option value="50">50</option>
    </x-base.form-select>
</div>