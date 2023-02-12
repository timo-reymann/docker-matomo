package main

import (
	"log"
	"os"
	"os/exec"
	"time"
)

func archiveReport(phpExecutable string) {
	cmd := exec.Command(phpExecutable, ConsolePath, "core:archive")
	cmd.Stdout = os.Stdout
	cmd.Stderr = os.Stderr

	err := cmd.Run()
	if err != nil {
		log.Printf("Error running cron: %s\n", err.Error())
	}
}

const ConsolePath = "/app/console"

func main() {
	log.Println("Run report_archiver.")
	phpExecutable, err := exec.LookPath("php")
	if err != nil {
		log.Fatalf("ERROR: %s \n", err.Error())
	}

	for {
		archiveReport(phpExecutable)
		time.Sleep(1 * time.Hour)
	}
}
