@component('mail::message')
![Upstream Logistics Logo](https://scontent.febb1-2.fna.fbcdn.net/v/t1.0-9/24296457_1511233528991384_4894354862744795546_n.jpg?oh=2475fe2505bdf272a8fb86ffb3b02e94&oe=5A97F44C)

# Contact Feedback

@component('mail::table')
| Name       	      | Email             | Phone           | Message                        |
| --------------------|:-----------------:| ---------------:|-------------------------------:|
| {{ $d['name'] }}    | {{ $d['email'] }} | {{ $d['phone'] }}|{{ $d['message'] }}			 |
@endcomponent


###Upstream Logistics
###+256392177521/+256782809031
###info@upstreamlogistics.com

Thanks,<br>
@endcomponent
