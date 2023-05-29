<?php 
/**
 * @package pms
 */

namespace Inc\Pages;

class ShortCode{
    public function register(){
        add_shortcode('pms', [$this, 'ViewTicketsPage']);
    }

    public function ViewTicketsPage($props){
       $default = [
            'name' => 'name'
       ];

        $props = shortcode_atts(
            $default, $props, 'pms', 
        );

        $html = '';

        $html .= '<div style="background-color:#DCDFEA;width:100vw;height:90vh;">';
        $html .= '<div style="padding:1rem;">';
        $html .=    '<table class="table align-middle mb-0 bg-white table-hover " style="width:80%;margin-left:10%;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;margin-top:3%;">';
        $html .=        '<thead class="bg-light">';
        $html .=           ' <tr style="font-size:large">';
        $html .=              '<th>Assignee</th>';
        $html .=                '<th>Task</th>';
        $html .=               ' <th>Status</th>';
        $html .=               ' <th>Due Date</th>';
        $html .=                '<th>Actions</th>';
        $html .=            '</tr>';
        $html .=       ' </thead>';
        $html .=        '<tbody>';
        $html .=            '<tr>';
        $html .=                '<td>';
        $html .=                    '<div class="d-flex align-items-center">';
        $html .=                       ' <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o="
                                   alt="" style="width: 45px; height: 45px" class="rounded-circle" />';
        $html .=                       ' <div class="ms-3">';
        $html .=                            '<p class="fw-bold mb-1">John Doe</p>';
        $html .=                            '<p class="text-muted mb-0">john.doe@gmail.com</p>';
        $html .=                        '</div>';
        $html .=                    '</div>';
        $html .=                '</td>';
        $html .=                '<td>';
        $html .=                    '<p class="fw-normal mb-1">Software engineer</p>';
        $html .=               ' </td>';
        $html .=                '<td>';
        $html .=                    '<span class="  text-dark  ">Pending</span>';
        $html .=                '</td>';
        $html .=                '<td>Senior</td>';
        $html .=               ' <td>';
        $html .=               ' <form method="POST">';
        $html .=                '<a href="" style="background-color: #006b0c;color:white; border-radius:3px;text-decoration:none;padding:6px;border: #006b0c;border-radius:3px;">Update</a>'; 
        $html .=                       ' <input type="hidden" name="ticket_id" value="<?php //echo $result->ticket_id; ?>" />';
        $html .=                       ' <input type="submit" name="delete" value="Delete"  style="background-color: #fd434c;color:white; border-radius:3px;padding:5px;border:none;" />';         
        $html .=                ' </form>';
        $html .=                '</td>';
        $html .=            '</tr>';       
        $html .= '</tbody>';
        $html .= '</table>';
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }
}