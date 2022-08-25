
<x-layout>



{{-- <x-livewire _="shock::delete"
    :obj="\App\Models\Test::first()"
    :allow="true"

/> --}}

<x-livewire _="shock::bookmark"
    :obj="\App\Models\Test::first()"
    :allow="true"

/>

{{-- <x-livewire _="shock::delete"
    :obj="\App\Models\Test::first()"
    :allow="false"
    :confirm="'{
        title,
        icon: \'arrow-left\',
        method: \'delete\'
    }'"
/> --}}

{{-- <x-livewire _="shock::delete"
    :obj="\App\Models\Test::first()"
    model-name="Raddd"
    :allow="true"

    success-msg="lmaoo"
    class="bg-fghghgf-primary"


    {{-- Other attrs are appeneded --
    label="Ex it out jor"
    _gfdg='gg'

/> --}}


</x-layout>


{{-- Truth table  for allow and show--}}

{{--

--}}
