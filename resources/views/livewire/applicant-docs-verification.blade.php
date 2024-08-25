
<form method="post" wire:submit.prevent="verified({{getUser($this->userId)->docs}})">
<x-title>{{ __('Applicant Documents') }}</x-title>
  
    <div class="grid grid-cols-3 gap-4">
       
        @foreach (getUserDocsFiles($this->userId) as $item)
             <div class="border">
                <a href="{{$item['path']}}">
                    <embed width="128px" height="180px" src="{{$item['path']}}" type="">
                    </embed>{{$item['name']}}
                </a>
            </div>
        @endforeach    
    
    </div>

    @if (!isApplicantDocsVerified($this->userId))
  
        <x-button class="ms-4">
            {{ __('Verify') }}
        </x-button>
   
    @endif
 
</form>  
