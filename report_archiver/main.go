package main

import (
	"github.com/kvz/logstreamer"
	"log"
	"os"
	"os/exec"
	"time"
)

var logger = log.New(os.Stdout, "[]matomo-report-archiver]: ", log.Lmsgprefix)
var logStreamerOut = logstreamer.NewLogstreamer(logger, "", false)

func archiveReport(phpExecutable string) {
	cmd := exec.Command(phpExecutable, ConsolePath, "core:archive")
	cmd.Stdout = logStreamerOut
	cmd.Stderr = logStreamerOut

	err := cmd.Run()
	if err != nil {
		logger.Printf("Error running cron: %s\n", err.Error())
	}
	logStreamerOut.FlushRecord()
	logStreamerOut.Flush()
}

const ConsolePath = "/app/console"

func main() {
	logger.Println("Run report_archiver.")
	phpExecutable, err := exec.LookPath("php")
	if err != nil {
		logger.Fatalf("ERROR: %s \n", err.Error())
	}

	for {
		archiveReport(phpExecutable)
		time.Sleep(1 * time.Hour)
	}
}
