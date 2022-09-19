<?php
$title="Formation";
$details = array (
"Aix-en-Provence" => array ("24/08/20","25/09/20","30/10/20","27/11/20"),
"Le Havre"        => array ("24/08/20","25/09/20","30/10/20","27/11/20"),
"Lyon"            => array ("24/08/20","25/09/20","30/10/20","27/11/20"),
"Marseille"       => array ("24/08/20","25/09/20","30/10/20","27/11/20"),
"Montpellier"     => array ("24/08/20","25/09/20","30/10/20","27/11/20"),
"Nice"            => array ("24/08/20","25/09/20","30/10/20","27/11/20"),
"Paris"           => array ("24/08/20","25/09/20","30/10/20","27/11/20"),
"Toulouse"        => array ("24/08/20","25/09/20","30/10/20","27/11/20"));
?>
<div class="row d-none d-md-block muli" id="calendrier">
    <div class="col-12 text-center">
        <a data-toggle="collapse" href="#collapseCalendrier" role="button" aria-expanded="false" aria-controls="collapseCalendrier" class='btn btn-blue mr-3'>Voir le calendrier</a>
    </div>
    <div class="col-12 collapse" id="collapseCalendrier">
        <table id="date">
            <thead>
                <tr class="hidden-phone">
                    <th class="bold">Lieux</th>
                    <th>Aout</th>
                    <th>Septembre</th>
                    <th>Octobre</th>
                    <th>Novembre</th>
                </tr>
            </thead>
            <tbody>

            @while($element=current($details))
                <tr>
                    <td>{{key($details)}}</td>
                    @while($date=current($element))
                        <td>
                            <div itemtype="http://schema.org/Event" itemscope="">
                            <div class="hidden-data" itemprop="name">{{$title}}</div>
                            <div class="hidden-data" itemprop="description">{{$title}}</div>
                            <div class="hidden-data" itemprop="eventAttendanceMode">OfflineEventAttendanceMode</div>
                            <div class="hidden-data" itemprop="eventStatus">EventScheduled</div>
                            <div class="hidden-data" itemprop="performer">Certification ISO</div>
                            <div class="hidden-data" itemprop="url">{{ url('/') }}</div>
                            <div class="hidden-data" itemtype="schema.org/Place" itemscope="" itemprop="location">
                                <div itemprop="name">
                                    <div itemprop="address">{{key($details)}}</div>
                                </div>
                            </div>
                            <div class="hidden-data" itemtype="schema.org/Thing" itemscope="" itemprop="organizer">
                                <div itemprop="name">
                                    <div itemprop="url">{{ url('/') }}</div>
                                </div>
                            </div>
                
                            <?php $correctdate=explode("/",$date);?>
                            <div itemprop="startdate" content="20{{$correctdate[2].'-'.$correctdate[1].'-'.$correctdate[0]}}">{{$date}}</div>
                            <div class="hidden-data" itemprop="enddate" content="20{{$correctdate[2].'-'.$correctdate[1].'-'.$correctdate[0]}}">{{$date}}</div>
                            <?php next($element); ?>
                        </td>
                    @endwhile
                    <?php next($details);?>
                </tr>
                @endwhile
            </tbody>
        </table>
    </div>
</div>