<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Bill;
use \App\Call;
class testBillController extends Controller
{
    public function getAvg(){
        $CallOperator=Call::orderBy('callOperator','asc')->pluck('callOperator');
    
       //  =========== data chart of name ============
        $label_name = array();
        $data_name = array();
        $num_name = 0;
        $current = null;
        if( ! empty($CallOperator) ) {
          foreach ( $CallOperator as $item ) {
             if ( $item != $current ) {
                if ( $num_name > 0 ) {
                   array_push( $label_name, $current );
                   array_push( $data_name, $num_name );
                }
                $current = $item;
                $num_name = 1;
             } else {
                $num_name++;
             }
          }
          if ($num_name > 0 ) {
             array_push( $label_name, $current );
             array_push( $data_name, $num_name );
          }
          $chart_name = array(
             'label' => $label_name,
             'data' => $data_name
          );

        }
        $duration=Call::orderBy('duration','asc')->pluck('duration');
    
        //  =========== data chart of name ============
         $label_duration = array();
         $data_duration = array();
         $num_name = 0;
         $current = null;
         if( ! empty($duration) ) {
           foreach ( $duration as $item ) {
              if ( $item != $current ) {
                 if ( $num_name > 0 ) {
                    array_push( $label_duration, $current );
                    array_push( $data_duration   , $num_name );
                 }
                 $current = $item;
                 $num_name = 1;
              } else {
                 $num_name++;
              }
           }
           if ($num_name > 0 ) {
              array_push( $label_duration, $current );
              array_push( $data_duration, $num_name );
           }
           $chart_duration = array(
              'label_duration' => $label_duration,
              'data_duration' => $data_duration,
           );
         }
        // dd($chart_name);
       //  return $chart_name;
        return view('pages.chart',compact('chart_name','chart_duration'));
        
       }
    //    public function getAvg_duration(){
    //     $duration=Call::orderBy('duration','asc')->pluck('duration');
    
    //    //  =========== data chart of name ============
    //     $label_duration = array();
    //     $data_duration = array();
    //     $num_name = 0;
    //     $current = null;
    //     if( ! empty($duration) ) {
    //       foreach ( $duration as $item ) {
    //          if ( $item != $current ) {
    //             if ( $num_name > 0 ) {
    //                array_push( $label_duration, $current );
    //                array_push( $data_duration   , $num_name );
    //             }
    //             $current = $item;
    //             $num_name = 1;
    //          } else {
    //             $num_name++;
    //          }
    //       }
    //       if ($num_name > 0 ) {
    //          array_push( $label_duration, $current );
    //          array_push( $data_duration, $num_name );
    //       }
    //       $chart_duration = array(
    //          'label' => $label_duration,
    //          'data' => $data_duration
    //       );
    //     }
    //     // dd($chart_duration);
    //    //  return $chart_name;
    //     return view('pages.chart',compact('chart_duration'));
        
       }
    
    




