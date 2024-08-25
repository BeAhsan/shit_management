
<x-module-section>

   <x-section-title title="Application" description="Please Fill All Information"/>
   
   <x-user-info-section :user="getUser()" />
   
   @if (!isApplicantHasDocuments())
     
      @livewire('applicant-docs-form')
    
   @else

      <section class="text-xl my-5">
         Your Documents are <b>submitted</b>, we will infom you when its <b>Verified!</b>.
      </section>

   @endif
 

</x-module-section>
