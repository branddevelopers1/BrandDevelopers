/* BrandDevelopers — Theme Settings Admin JS */
/* global wp, jQuery */

(function ( $ ) {
    'use strict';

    // ── MEDIA FRAME CACHE ─────────────────────────────────
    // Reuse a single wp.media frame per field to avoid memory leaks
    var frames = {};

    function openMediaFrame( targetKey, onSelect ) {
        if ( ! frames[ targetKey ] ) {
            frames[ targetKey ] = wp.media({
                title:    'Select or Upload Image',
                button:   { text: 'Use this image' },
                multiple: false,
                library:  { type: 'image' }
            });
            frames[ targetKey ].on( 'select', function () {
                var attachment = frames[ targetKey ]
                    .state()
                    .get( 'selection' )
                    .first()
                    .toJSON();
                onSelect( attachment );
            });
        }
        frames[ targetKey ].open();
    }

    // ── UPLOAD BUTTON ─────────────────────────────────────
    $( document ).on( 'click', '.bd-image-picker__upload', function ( e ) {
        e.preventDefault();
        var targetKey = $( this ).data( 'target' );
        var $picker   = $( '#picker-' + targetKey );

        openMediaFrame( targetKey, function ( attachment ) {
            var url = attachment.sizes && attachment.sizes.large
                ? attachment.sizes.large.url
                : attachment.url;

            // Update hidden input
            $picker.find( '.bd-image-picker__input' ).val( url );

            // Rebuild preview
            $picker.find( '.bd-image-picker__preview' )
                .addClass( 'bd-image-picker__preview--has-image' )
                .html(
                    '<img src="' + url + '" alt="">' +
                    '<div class="bd-image-picker__overlay">' +
                        '<button type="button" class="bd-image-picker__change" data-target="' + targetKey + '">' +
                            '<span class="dashicons dashicons-edit"></span> Change' +
                        '</button>' +
                        '<button type="button" class="bd-image-picker__remove" data-target="' + targetKey + '">' +
                            '<span class="dashicons dashicons-trash"></span> Remove' +
                        '</button>' +
                    '</div>'
                );

            // Show footer with Change / Remove buttons
            if ( ! $picker.find( '.bd-image-picker__footer' ).length ) {
                $picker.append(
                    '<div class="bd-image-picker__footer">' +
                        '<button type="button" class="bd-btn bd-btn--outline bd-image-picker__upload" data-target="' + targetKey + '">Change Image</button>' +
                        '<button type="button" class="bd-btn bd-btn--danger bd-image-picker__remove" data-target="' + targetKey + '">Remove</button>' +
                    '</div>'
                );
            }
        });
    });

    // ── CHANGE BUTTON (overlay) ───────────────────────────
    $( document ).on( 'click', '.bd-image-picker__change', function ( e ) {
        e.preventDefault();
        var targetKey = $( this ).data( 'target' );
        var $picker   = $( '#picker-' + targetKey );

        openMediaFrame( targetKey, function ( attachment ) {
            var url = attachment.url;
            $picker.find( '.bd-image-picker__input' ).val( url );
            $picker.find( '.bd-image-picker__preview img' ).attr( 'src', url );
        });
    });

    // ── REMOVE BUTTON ─────────────────────────────────────
    $( document ).on( 'click', '.bd-image-picker__remove', function ( e ) {
        e.preventDefault();
        var targetKey = $( this ).data( 'target' );
        var $picker   = $( '#picker-' + targetKey );

        // Clear value
        $picker.find( '.bd-image-picker__input' ).val( '' );

        // Reset preview to empty state
        $picker.find( '.bd-image-picker__preview' )
            .removeClass( 'bd-image-picker__preview--has-image' )
            .html(
                '<div class="bd-image-picker__empty">' +
                    '<span class="dashicons dashicons-format-image"></span>' +
                    '<p>No image selected</p>' +
                    '<button type="button" class="bd-btn bd-btn--primary bd-image-picker__upload" data-target="' + targetKey + '">' +
                        'Upload Image' +
                    '</button>' +
                '</div>'
            );

        // Remove footer
        $picker.find( '.bd-image-picker__footer' ).remove();

        // Clear cached frame so a fresh one opens next time
        delete frames[ targetKey ];
    });

    // ── COLOUR PICKER SYNC ────────────────────────────────
    // Colour picker → text input
    $( document ).on( 'input change', '.bd-color-picker', function () {
        var targetKey = $( this ).data( 'target' );
        $( '#' + targetKey ).val( $( this ).val() );
    });

    // Text input → colour picker
    $( document ).on( 'input', '.bd-color-text', function () {
        var val = $( this ).val();
        var $picker = $( this ).siblings( '.bd-color-picker' );
        // Only update colour picker if value looks like a hex
        if ( /^#[0-9a-fA-F]{6}$/.test( val ) ) {
            $picker.val( val );
        }
    });

    // ── TOGGLE LABEL UPDATE ───────────────────────────────
    $( document ).on( 'change', '.bd-toggle__input', function () {
        var $label = $( this ).closest( '.bd-toggle' ).find( '.bd-toggle__label' );
        $label.text( $( this ).is( ':checked' ) ? 'Enabled' : 'Disabled' );
    });

    // ── SAVE FEEDBACK ─────────────────────────────────────
    $( 'form' ).on( 'submit', function () {
        var $btn = $( this ).find( '.bd-btn--primary[type="submit"]' );
        $btn.html( '<span class="dashicons dashicons-update bd-spin"></span> Saving...' ).prop( 'disabled', true );
    });

}( jQuery ) );
