#!/bin/bash

if [[ -z $1 ]]; then
    echo "No argument provided. See -h for help."
    exit 1
fi

ABSLOC=/opt/html/mousepawmedia.com/serverstatus

while getopts ":hs:" opt; do
    case $opt in
        h)
            echo "Report status of the Hawksnest server."
            echo "status -s <status_id>"
            echo "   0: Normal"
            echo "   1: Maintainence"
            echo "   2: Weather"
            echo "   3: Error"
            ;;
        s)
            case $OPTARG in
                0)
                    echo "Reporting NORMAL status."
                    ln -sf ${ABSLOC}/serverstatus_normal.html ${ABSLOC}/serverstatus.html
                    ;;
                1)
                    echo "Reporting MAINTAINANCE status."
                    ln -sf ${ABSLOC}/serverstatus_maintain.html ${ABSLOC}/serverstatus.html
                    ;;
                2)
                    echo "Reporting WEATHER status."
                    ln -sf ${ABSLOC}/serverstatus_weather.html ${ABSLOC}/serverstatus.html
                    ;;
                3)
                    echo "Reporting ERROR status."
                    ln -sf ${ABSLOC}/serverstatus_error.html ${ABSLOC}/serverstatus.html
                    ;;
                4)
                    echo "Reporting CUSTOM status."
                    ln -sf ${ABSLOC}/serverstatus_custom.html ${ABSLOC}/serverstatus.html
                    ;;
                *)
                    echo "Invalid status $OPTARG. See -h for help."
                    ;;
                esac
            ;;
        \?)
            echo "Invalid option -$OPTARG. See -h for help."
            exit 1
            ;;
        :)
            echo "Status (-s) requires an argument. See -h for help."
            exit 1
            ;;

    esac
done
