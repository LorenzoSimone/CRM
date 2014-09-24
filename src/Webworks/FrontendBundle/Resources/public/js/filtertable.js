/*
 Copyright (C) 2014 Anton Dachauer (kontakt@webworks-nuernberg.de)

 Dieses Programm ist freie Software. Sie können es unter den
 Bedingungen der GNU General Public License, wie von der Free Software
 Foundation veröffentlicht, weitergeben und/oder modifizieren, entweder
 gemäß Version 2 der Lizenz oder (nach Ihrer Option) jeder späteren
 Version.

 Die Veröffentlichung dieses Programms erfolgt in der Hoffnung, dass es
 Ihnen von Nutzen sein wird, aber OHNE IRGENDEINE GARANTIE, sogar ohne
 die implizite Garantie der MARKTREIFE oder der VERWENDBARKEIT FÜR
 EINEN BESTIMMTEN ZWECK. Details finden Sie in der GNU General Public
 License.

 Sie sollten ein Exemplar der GNU General Public License zusammen mit
 diesem Programm erhalten haben. Falls nicht, schreiben Sie an die Free
 Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA
 02110, USA.
 */

$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
            $filters = $panel.find('.filters input'),
            $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
            inputContent = $input.val().toLowerCase(),
            $panel = $input.parents('.filterable'),
            column = $panel.find('.filters th').index($input.parents('th')),
            $table = $panel.find('.table'),
            $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
