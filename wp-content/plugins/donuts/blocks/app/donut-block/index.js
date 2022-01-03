//import './blocks-main.css';
import block_icons from "../icons/index";

const { registerBlockType }      =      wp.blocks;
const { __ }                     =      wp.i18n;
const { InspectorControls }      =      wp.editor;
const { PanelBody, PanelRow, 
        TextControl, SelectControl, TextareaControl } =     wp.components;
const { useState } = wp.element;


registerBlockType( 'donut-diary/donut', {
    title:              __( 'Donut', 'donut' ),
    description:        __( 'Create a new donut review', 'donut' ),
    category:           'text',
    icon:               block_icons.icondo,
    keywords: [
        __( 'Food', 'donut' ),
        __( 'Breakfast', 'donut' ),
        __( 'Pastry', 'donut' )
    ],
    supports: {
        html:           false
    },
    attributes: {
        //bakery name
        bakery_name: {
            type:                       'string',
            source:                     'text',
            selector:                   '.bakery_name-ph'
        },
        //donut name
        donut_name: {
            type:                       'string',
            source:                     'text',
            selector:                   '.donut-name-ph'
        },
        //donut type - drop down
        donut_type: {
            type:                       'string',
            source:                     'text',
            selector:                   '.donut-type-ph',
            default:                    'Yeast'
        },
        //review
        donut_review: {
            type:                       'string',
            source:                     'text',
            selector:                   '.donut-review-ph',
        },
        text_alignment: {
            type:                       'string'
        },
        block_alignment: {
            type:                       'string',
            default:                    'wide'
        }
    },
    edit: ( props ) => {

        return [
            <InspectorControls>
                <PanelBody title={ __( 'Basics', 'donut' ) }>
                    <PanelRow>
                        <p>{ __( 'Configure the contents of your block here.' ,'donut' ) }</p>
                    </PanelRow>

                    <TextControl 
                        label={ __( 'Bakery Name', 'donut' ) } 
                        help={ __( 'Name the location from which the donut was sampled', 'donut' ) } 
                        value={ props.attributes.bakery_name }
                        onChange={ ( new_val ) => {
                            props.setAttributes({ bakery_name: new_val })
                        }} />
                    
                    <TextControl 
                        label={ __( 'Donut Name', 'donut' ) } 
                        help={ __( 'What was the donut called?  Ex. Glazed, Custard, Cruller, Powdered', 'donut' ) } 
                        value={ props.attributes.donut_name }
                        onChange={ ( new_val) => {
                            props.setAttributes({ donut_name: new_val })
                        }} />

                    <SelectControl 
                        label={ __( 'Type of Donut', 'donut' ) }
                        help={ __( 'What kind of donut was it? Ex. Yeast, Cake, Fancy or Holes', 'donut' ) }
                        value={ props.attributes.donut_type } 
                        options={[
                            { value: 'Yeast', label: 'Yeast' },
                            { value: 'Cake', label: 'Cake' },
                            { value: 'Fancy', label: 'Fancy' },
                            { value: 'Holes', label: 'Holes' }
                        ]}
                        onChange={ ( new_val ) => {
                            props.setAttributes({ donut_type: new_val })
                        }} />

                    
                    <TextareaControl
                        label={ __( 'Donut Review', 'donut' ) }
                        help={ __( 'Why was this a good or bad donut?', 'donut' ) }
                        value={ props.attributes.donut_review }
                        onChange={ ( new_val ) => {
                            props.setAttributes({ donut_review: new_val })
                        }} />
                </PanelBody>
            </InspectorControls>,
            <div className={ props.className }>
                <ul class="list-unstyled">
                <li>
                        <strong>{ __( 'Bakery Name', 'donut' ) }: </strong> 
                        <span className="bakery_name-ph">{ props.attributes.bakery_name }</span>
                    </li>
                    <li>
                        <strong>{ __( 'Donut Name', 'donut' ) }: </strong> 
                        <span className="donut-name-ph">{ props.attributes.donut_name }</span>
                    </li>
                    <li>
                        <strong>{ __( 'Type of Donut', 'donut' ) }: </strong> 
                        <span className="donut-type-ph">{ props.attributes.donut_type}</span>
                    </li>
                    <li>
                        <strong>{ __( 'Donut Review', 'donut' ) }: </strong> 
                        <span className="donut-review-ph">{ props.attributes.donut_review }</span>
                    </li>
                </ul>
            </div>
        ];
    },
    save: ( props ) => {
        return (
            <div className={ `aligndefault` } >
                <ul className="list-unstyled"
                    style={{ textAlign: props.attributes.text_alignment }}>
                    <li>
                        <strong>{ __( 'Bakery Name', 'donut' ) }: </strong> 
                        <span className="bakery_name-ph">{ props.attributes.bakery_name }</span>
                    </li>
                    <li>
                        <strong>{ __( 'Donut Name', 'donut' ) }: </strong> 
                        <span className="donut-name-ph">{ props.attributes.donut_name }</span>
                    </li>
                    <li>
                        <strong>{ __( 'Type of Donut', 'donut' ) }: </strong> 
                        <span className="donut-type-ph">{ props.attributes.donut_type }</span>
                    </li>
                    <li>
                        <strong>{ __( 'Donut Review', 'donut' ) }: </strong> 
                        <span className="donut-review-ph">{ props.attributes.donut_review }</span>
                    </li>
                </ul>
            </div>
        )
    }
});