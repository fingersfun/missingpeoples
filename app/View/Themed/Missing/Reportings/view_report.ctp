<div class="row">
<div class="col-md-12">
<div class="row">
<div class="panel panel-default">
<div class="panel-body">
<div class="row">
<div class="col-md-9">
	
	    
        <div class="timeline-centered">

        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-success">
                   <i class="fa fa-user fa-2x margin10px"></i>
                </div>

                <div class="timeline-label">
                    <h4>Person Details</h4>
                    <dl class="dl-horizontal ">
						<?php 
						echo $this->Html->tag('dt','Name');
						echo $this->Html->tag('dd',$report['Person']['name']);
						echo $this->Html->tag('dt','Surname');
						echo $this->Html->tag('dd',$report['Person']['surname']);
						echo $this->Html->tag('dt','Gender');
						echo $this->Html->tag('dd',$report['Person']['sex']);
						echo $this->Html->tag('dt','Date of birth');
						echo $this->Html->tag('dd',$report['Person']['dob']);
						echo $this->Html->tag('dt','Age');
						echo $this->Html->tag('dd',$report['Person']['age']);
						?>      
					</dl>	
					
                </div>
            </div>

        </article>


        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-secondary">
                    <i class="fa fa-search fa-2x margin10px"></i>
                </div>

                <div class="timeline-label">
                    <h4>Identification Details</h4>
                    <dl class="dl-horizontal ">
						<?php 
						echo $this->Html->tag('dt','Height');
						echo $this->Html->tag('dd',$report['Identification']['height']);
						echo $this->Html->tag('dt','Weight');
						echo $this->Html->tag('dd',$report['Identification']['weight']);
						echo $this->Html->tag('dt','Color of eyes');
						echo $this->Html->tag('dd',$report['Identification']['colorofeyes']);
						echo $this->Html->tag('dt','color of heir');
						echo $this->Html->tag('dd',$report['Identification']['colorofheir']);
						echo $this->Html->tag('dt','Marks');
						echo $this->Html->tag('dd',$report['Identification']['marks']);
						echo $this->Html->tag('dt','Type');
						echo $this->Html->tag('dd',$report['Identification']['type']);
						echo $this->Html->tag('dt','Place');
						echo $this->Html->tag('dd',$report['Identification']['place']);
						echo $this->Html->tag('dt','Wearing');
						echo $this->Html->tag('dd',$report['Identification']['wearing']);
						echo $this->Html->tag('dt','Characteristics');
						echo $this->Html->tag('dd',$report['Identification']['characteristics']);
						?>      
					</dl>
                </div>
            </div>

        </article>


        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-info">
                    <i class="fa fa-eye-slash fa-2x margin10px"></i>
                </div>

                <div class="timeline-label">
                    <h4>Missing Details</h4>

                    <dl class="dl-horizontal ">
						<?php 
						echo $this->Html->tag('dt','Date');
						echo $this->Html->tag('dd',$report['Missingdetail']['date']);
						echo $this->Html->tag('dt','Reason');
						echo $this->Html->tag('dd',$report['Missingdetail']['reason']);
						echo $this->Html->tag('dt','City');
						echo $this->Html->tag('dd',$report['Missingdetail']['city']);
						echo $this->Html->tag('dt','District');
						echo $this->Html->tag('dd',$report['Missingdetail']['district']);
						echo $this->Html->tag('dt','State');
						echo $this->Html->tag('dd',$report['Missingdetail']['state']);
						?>      
					</dl>
                </div>
            </div>

        </article>


        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-warning">
                    <i class="fa fa-phone fa-2x margin10px"></i>
                </div>

                <div class="timeline-label">
                    <h4>Cantact Details</h4>

                     <dl class="dl-horizontal ">
						<?php 
						echo $this->Html->tag('dt','Name');
						echo $this->Html->tag('dd',$report['Contact']['name']);
						echo $this->Html->tag('dt','Surname');
						echo $this->Html->tag('dd',$report['Contact']['surname']);
						echo $this->Html->tag('dt','Relation');
						echo $this->Html->tag('dd',$report['Contact']['relation']);
						echo $this->Html->tag('dt','Phone No.');
						echo $this->Html->tag('dd',$report['Contact']['phone']);
						echo $this->Html->tag('dt','Address');
						echo $this->Html->tag('dd',$report['Contact']['address']);
						echo $this->Html->tag('dt','City');
						echo $this->Html->tag('dd',$report['Contact']['city']);
						echo $this->Html->tag('dt','District');
						echo $this->Html->tag('dd',$report['Contact']['district']);
						echo $this->Html->tag('dt','State');
						echo $this->Html->tag('dd',$report['Contact']['state']);
						?>      
					</dl>
                </div>
            </div>

        </article>

		
        <article class="timeline-entry begin">

            <div class="timeline-entry-inner">

                <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                    <i class="fa fa-star fa-2x margin10px"></i>
                </div>

            </div>

        </article>
		

    </div>

    


	
	
</div>
<div class="col-md-3">

<?php echo $this->Html->image($report['Person']['picture'],array('class'=>'img-thumbnail pull-right')); ?>






<!--
<div class="panel panel-default">
  <div class="panel-heading"><strong class="text-danger">Person Details</strong></div>
  <div class="panel-body">	
    <dl class="dl-horizontal ">
		<?php 
		echo $this->Html->tag('dt','Name');
		echo $this->Html->tag('dd',$report['Person']['name']);
		echo $this->Html->tag('dt','Surname');
		echo $this->Html->tag('dd',$report['Person']['surname']);
		echo $this->Html->tag('dt','Gender');
		echo $this->Html->tag('dd',$report['Person']['sex']);
		echo $this->Html->tag('dt','Date of birth');
		echo $this->Html->tag('dd',$report['Person']['dob']);
		echo $this->Html->tag('dt','Age');
		echo $this->Html->tag('dd',$report['Person']['age']);
		?>      
    </dl>		
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><strong class="text-danger">Identification Details</strong></div>
  <div class="panel-body">
    <dl class="dl-horizontal ">
		<?php 
		echo $this->Html->tag('dt','Height');
		echo $this->Html->tag('dd',$report['Identification']['height']);
		echo $this->Html->tag('dt','Weight');
		echo $this->Html->tag('dd',$report['Identification']['weight']);
		echo $this->Html->tag('dt','Color of eyes');
		echo $this->Html->tag('dd',$report['Identification']['colorofeyes']);
		echo $this->Html->tag('dt','color of heir');
		echo $this->Html->tag('dd',$report['Identification']['colorofheir']);
		echo $this->Html->tag('dt','Marks');
		echo $this->Html->tag('dd',$report['Identification']['marks']);
		echo $this->Html->tag('dt','Type');
		echo $this->Html->tag('dd',$report['Identification']['type']);
		echo $this->Html->tag('dt','Place');
		echo $this->Html->tag('dd',$report['Identification']['place']);
		echo $this->Html->tag('dt','Wearing');
		echo $this->Html->tag('dd',$report['Identification']['wearing']);
		echo $this->Html->tag('dt','Characteristics');
		echo $this->Html->tag('dd',$report['Identification']['characteristics']);
		?>      
    </dl>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading"><strong class="text-danger">Missingdetail Details</strong></div>
  <div class="panel-body">
    <dl class="dl-horizontal ">
		<?php 
		echo $this->Html->tag('dt','Date');
		echo $this->Html->tag('dd',$report['Missingdetail']['date']);
		echo $this->Html->tag('dt','Reason');
		echo $this->Html->tag('dd',$report['Missingdetail']['reason']);
		echo $this->Html->tag('dt','City');
		echo $this->Html->tag('dd',$report['Missingdetail']['city']);
		echo $this->Html->tag('dt','District');
		echo $this->Html->tag('dd',$report['Missingdetail']['district']);
		echo $this->Html->tag('dt','State');
		echo $this->Html->tag('dd',$report['Missingdetail']['state']);
		?>      
    </dl>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading"><strong class="text-danger">Contact Details</strong></div>
  <div class="panel-body">
    <dl class="dl-horizontal ">
		<?php 
		echo $this->Html->tag('dt','Name');
		echo $this->Html->tag('dd',$report['Contact']['name']);
		echo $this->Html->tag('dt','Surname');
		echo $this->Html->tag('dd',$report['Contact']['surname']);
		echo $this->Html->tag('dt','Relation');
		echo $this->Html->tag('dd',$report['Contact']['relation']);
		echo $this->Html->tag('dt','Phone No.');
		echo $this->Html->tag('dd',$report['Contact']['phone']);
		echo $this->Html->tag('dt','Address');
		echo $this->Html->tag('dd',$report['Contact']['address']);
		echo $this->Html->tag('dt','City');
		echo $this->Html->tag('dd',$report['Contact']['city']);
		echo $this->Html->tag('dt','District');
		echo $this->Html->tag('dd',$report['Contact']['district']);
		echo $this->Html->tag('dt','State');
		echo $this->Html->tag('dd',$report['Contact']['state']);
		?>      
    </dl>
  </div>
</div> -->

</div>
</div>

<style>

img {
    vertical-align: middle;
}

.img-responsive {
    display: block;
    height: auto;
    max-width: 100%;
}

.img-rounded {
    border-radius: 3px;
}

.img-thumbnail {
    background-color: #fff;
    border: 1px solid #ededf0;
    border-radius: 3px;
    display: inline-block;
    height: auto;
    line-height: 1.428571429;
    max-width: 100%;
    moz-transition: all .2s ease-in-out;
    o-transition: all .2s ease-in-out;
    padding: 2px;
    transition: all .2s ease-in-out;
    webkit-transition: all .2s ease-in-out;
}

.img-circle {
    border-radius: 50%;
}

.timeline-centered {
    position: relative;
    margin-bottom: 30px;
}

    .timeline-centered:before, .timeline-centered:after {
        content: " ";
        display: table;
    }

    .timeline-centered:after {
        clear: both;
    }

    .timeline-centered:before, .timeline-centered:after {
        content: " ";
        display: table;
    }

    .timeline-centered:after {
        clear: both;
    }

    .timeline-centered:before {
        content: '';
        position: absolute;
        display: block;
        width: 4px;
        background: #f5f5f6;
        /*left: 50%;*/
        top: 20px;
        bottom: 20px;
        margin-left: 30px;
    }

    .timeline-centered .timeline-entry {
        position: relative;
        /*width: 50%;
        float: right;*/
        margin-top: 5px;
        margin-left: 30px;
        margin-bottom: 10px;
        clear: both;
    }

        .timeline-centered .timeline-entry:before, .timeline-centered .timeline-entry:after {
            content: " ";
            display: table;
        }

        .timeline-centered .timeline-entry:after {
            clear: both;
        }

        .timeline-centered .timeline-entry:before, .timeline-centered .timeline-entry:after {
            content: " ";
            display: table;
        }

        .timeline-centered .timeline-entry:after {
            clear: both;
        }

        .timeline-centered .timeline-entry.begin {
            margin-bottom: 0;
        }

        .timeline-centered .timeline-entry.left-aligned {
            float: left;
        }

            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner {
                margin-left: 0;
                margin-right: -18px;
            }

                .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time {
                    left: auto;
                    right: -100px;
                    text-align: left;
                }

                .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-icon {
                    float: right;
                }

                .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label {
                    margin-left: 0;
                    margin-right: 70px;
                }

                    .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label:after {
                        left: auto;
                        right: 0;
                        margin-left: 0;
                        margin-right: -9px;
                        -moz-transform: rotate(180deg);
                        -o-transform: rotate(180deg);
                        -webkit-transform: rotate(180deg);
                        -ms-transform: rotate(180deg);
                        transform: rotate(180deg);
                    }

        .timeline-centered .timeline-entry .timeline-entry-inner {
            position: relative;
            margin-left: -24px;
        }

            .timeline-centered .timeline-entry .timeline-entry-inner:before, .timeline-centered .timeline-entry .timeline-entry-inner:after {
                content: " ";
                display: table;
            }

            .timeline-centered .timeline-entry .timeline-entry-inner:after {
                clear: both;
            }

            .timeline-centered .timeline-entry .timeline-entry-inner:before, .timeline-centered .timeline-entry .timeline-entry-inner:after {
                content: " ";
                display: table;
            }

            .timeline-centered .timeline-entry .timeline-entry-inner:after {
                clear: both;
            }

            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time {
                position: absolute;
                left: -100px;
                text-align: right;
                padding: 10px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span {
                    display: block;
                }

                    .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span:first-child {
                        font-size: 15px;
                        font-weight: bold;
                    }

                    .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span:last-child {
                        font-size: 12px;
                    }
			.margin10px {
				margin-top:10px;
			}
            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon {
                background: #fff;
                color: #737881;
                display: block;
                width: 50px;
                height: 50px;
                -webkit-background-clip: padding-box;
                -moz-background-clip: padding;
                background-clip: padding-box;
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 25px;
                text-align: center;
                -moz-box-shadow: 0 0 0 5px #f5f5f6;
                -webkit-box-shadow: 0 0 0 5px #f5f5f6;
                box-shadow: 0 0 0 5px #f5f5f6;
                line-height: 40px;
                font-size: 15px;
                float: left;
            }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-primary {
                    background-color: #303641;
                    color: #fff;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-secondary {
                    background-color: #ee4749;
                    color: #fff;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-success {
                    background-color: #00a651;
                    color: #fff;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-info {
                    background-color: #21a9e1;
                    color: #fff;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-warning {
                    background-color: #fad839;
                    color: #fff;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-danger {
                    background-color: #cc2424;
                    color: #fff;
                }

            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label {
                position: relative;
                background: #f5f5f6;
                padding: 1em;
                margin-left: 70px;
                -webkit-background-clip: padding-box;
                -moz-background-clip: padding;
                background-clip: padding-box;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
				/*
				border: 1px solid #DDD;
				box-shadow: 1px 2px 1px #DDD;
				*/
            }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label:after {
                    content: '';
                    display: block;
                    position: absolute;
                    width: 0;
                    height: 0;
                    border-style: solid;
                    border-width: 9px 9px 9px 0;
                    border-color: transparent #f5f5f6 transparent transparent;
                    left: 0;
                    top: 10px;
                    margin-left: -9px;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2, .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p {
                    color: #737881;
                    font-family: "Noto Sans",sans-serif;
                    font-size: 12px;
                    margin: 0;
                    line-height: 1.428571429;
                }

                    .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p + p {
                        margin-top: 15px;
                    }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 {
                    font-size: 16px;
                    margin-bottom: 10px;
                }

                    .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 a {
                        color: #303641;
                    }

                    .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 span {
                        -webkit-opacity: .6;
                        -moz-opacity: .6;
                        opacity: .6;
                        -ms-filter: alpha(opacity=60);
                        filter: alpha(opacity=60);
                    }

</style>




<?php 

//echo '<pre>';
//print_r($report);
//echo '</pre>';
	
?>
</div>
</div>
</div>
</div>
</div>
<style>
h1, h2, h3 {
margin-top: 0px;
margin-bottom: 0px;
}
</style>