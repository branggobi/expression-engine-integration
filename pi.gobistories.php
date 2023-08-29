<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$plugin_info = array(
    'pi_name'         => 'Gobistories Widget',
    'pi_version'      => '1.0',
    'pi_author'       => 'Your Name',
    'pi_author_url'   => 'Your Website URL',
    'pi_description'  => 'Embeds the Gobistories widget.',
);
class Gobistories {
    public function stories() {
        $EE = get_instance();
        $stories = $EE->TMPL->fetch_param('stories', '');
        $bubble_size = $EE->TMPL->fetch_param('bubble_size', '100px');
        $color = $EE->TMPL->fetch_param('color', '#15D6EA');
        $show_play_icon = $EE->TMPL->fetch_param('show-play-icon', 'true');
        $html = '<script src="https://widget.gobistories.com/gwi/6" async onload="gobi.discover()"></script>';
        $html .= '<div class="gobi-stories"';
        $html .= ' data-gobi-stories="' . $stories . '"';
        $html .= ' data-gobi-bubble-size="' . $bubble_size . '"';
        $html .= ' data-gobi-color="'. $color .'"';
        $html .= ' data-gobi-show-play-icon="'. $show_play_icon .'"';
        $html .= ' data-gobi-auto-start-with-sound="true"';
        $html .= '</div>';
        return $html;
    }
    public function collection() {
        $EE = get_instance();
        $collection_id = $EE->TMPL->fetch_param('collection-id', '');
        $html = '<script src="https://widget.gobistories.com/gwi/6" async onload="gobi.discover()"></script>';
        $html .= '<div class="gobi-collection" data-gobi-collection-id="'.$collection_id.'"></div>';
        return $html;
    }
}
?>