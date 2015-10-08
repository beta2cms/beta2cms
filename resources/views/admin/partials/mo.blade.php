<div class="col-lg-3 col-md-6">
    <div class="panel panel-{{ $panel }}">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-{{ $icon }} fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">{{ $count }}</div>
                    <div>{{ $massage }}</div>
                </div>
            </div>
        </div>
        <a href="#">
        <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right">
                <i class="fa fa-arrow-circle-right"></i>
            </span>
            <div class="clearfix"></div>
        </div>
        </a>
    </div>
</div>


{{--@include('admin.partials.mo', [--}}
{{--'massage' => 'New Comments!',--}}
{{--'count' => 24,--}}
{{--'icon' => 'comments',--}}
{{--'panel' => 'yellow'--}}
{{--])--}}
{{--@include('admin.partials.mo', [--}}
{{--'massage' => 'New Tasks!',--}}
{{--'count' => 12,--}}
{{--'icon' => 'tasks',--}}
{{--'panel' => 'green'--}}
{{--])--}}

{{--@include('admin.partials.mo', [--}}
{{--'massage' => 'New Orders!',--}}
{{--'count' => 124,--}}
{{--'icon' => 'shopping-card',--}}
{{--'panel' => 'yellow'--}}
{{--])--}}
{{--@include('admin.partials.mo', [--}}
{{--'massage' => 'Support Tickets!',--}}
{{--'count' => 13,--}}
{{--'icon' => 'support',--}}
{{--'panel' => 'red'--}}
{{--])--}}