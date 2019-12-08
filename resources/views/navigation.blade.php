<router-link tag="h3" :to="{
                name: 'index',
                params: {
                    resourceName: 'waiting-approvals'
                }
            }"
             class="cursor-pointer flex items-center font-normal dim text-white mb-6 text-base no-underline">

    

    <?php 
$remain = App\Confirmation::where('is_checked',0)->get()->count();

     ?>
    <span class="sidebar-label">
        Waiting Approvals <p style="padding: 2px 4px;
    border-radius: 32%; border:1px solid white;" class="btn btn-danger">{{$remain}}</p> 
    </span>
</router-link>
