@props(['blog'])
@auth
<section class="container">
 <div class="col-md-8 mx-auto">
     <x-card-wrapper >

     <form action="{{route('blog:comment',['blog'=>$blog])}}" method="POST">
         @csrf
         <div class="mb-3">

          <textarea required class="form-control border border-0" name="body" id="" cols="10" rows="5" placeholder="Say Something..."></textarea>
         </div>

            <x-error name="body" />
         <div class="d-flex justify-content-end">
             <button type="submit" class="btn btn-primary">Submit</button>
         </div>
       </form>
     </x-card-wrapper>
 </div>
</section >
@if ($blog->comments->count())
          <x-comment  :comments="$blog->comments"/>
          @endif
@else
<p class="text-center">
 Please <a  href="/login">Login</a> to a participate in this descussion.
</p>

@endauth
