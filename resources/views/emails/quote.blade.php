@component('mail::message')
![Upstream Logistics Logo](https://scontent.febb1-2.fna.fbcdn.net/v/t1.0-9/24296457_1511233528991384_4894354862744795546_n.jpg?oh=2475fe2505bdf272a8fb86ffb3b02e94&oe=5A97F44C)

# Quote Request

##Client Information

@component('mail::table')
| Name       	      | Email             | Phone           | Message             |
| --------------------|:-----------------:| ---------------:|--------------------:|
| {{ $q['name'] }}    | {{ $q['email'] }} | {{ $q['phone'] }}|{{ $q['message'] }} |
@endcomponent

##Freight Information

@component('mail::table')
| Freight Type             | Departure Location        | Weight              |
| -------------------------|:-------------------------:| -------------------:|
| {{ $q['freight_type'] }} | {{ $q['dept_location'] }} | {{ $q['weight'] }}  |

####Delivery Location: {{ $q['delivery_location'] }}

@endcomponent


###Upstream Logistics
###+256392177521/+256782809031
###info@upstreamlogistics.com

Thanks,<br>
@endcomponent
